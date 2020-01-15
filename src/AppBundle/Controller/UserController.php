<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route("/api/v1")
 */
class UserController extends Controller
{
    private $em;
    private $responseService;
    private $userRep;

    private function setParams(){
        $this->responseService = $this->get('app.send_response');
        $this->em = $this->getDoctrine()->getManager();
        $this->userRep = $this->getDoctrine()->getRepository('AppBundle:User');
    }

    /**
     * @Route("/user", name="newUser")
     * @Method("POST")
     */
    public function createUserAction(Request $request, LoggerInterface $logger)
    {
        $this->setParams();

        try {
            $newUser = new User();
            $newUser->setFirstname($request->get('firstname'));
            $newUser->setLastname($request->get('lastname'));
            $errors = $this->get('validator')->validate($newUser);

            if (!empty($errors) && count($errors) > 0) {
                return $this->responseService
                            ->returnResponse('error','Validation Error',$errors);
            }
            $this->em->persist($newUser);
            $this->em->flush();

            //Data for logs
            $newUserData = [
                'firstname' => $newUser->getFirstname(),
                'lastname' => $newUser->getFirstname()
            ];

            $logger->info("User created successfully with parameters ".json_encode($newUserData));

            return $this->responseService
                        ->returnResponse('success','User Created!');

        } catch (\Exception $exception) {
            return $this->responseService
                        ->returnResponse('error',$exception->getMessage());
        }
    }


    // EXAMPLE => ?order=[{"key":"firstname","direction":"ASC"},{"key":"lastname","direction":"DESC"}]

    /**
     * @Route("/users", name="users")
     * @Method("GET")
     */
    public function findAllAction(Request $request)
    {

        $this->setParams();

        try {

            $usersQuery = $this->userRep->createQueryBuilder("users");

            $ordering = $request->get('order');
            $ordering = json_decode($ordering, true);

            $validSorting = ['firstname','lastname'];
            $validSortingDir = ['ASC','DESC'];

            //if isset ordering order data
            if($ordering) {
                foreach ($ordering as $order) {
                    if(in_array($order['key'],$validSorting) && in_array($order['direction'],$validSortingDir)) {
                        $usersQuery->addOrderBy("users.".$order['key'], $order['direction']);

                    }
                }
            }

            $users = $usersQuery
                ->getQuery()
                ->getArrayResult();


            return $this->responseService->returnResponse('success','Users result', $users);

        } catch (\Exception $exception) {
            return $this->responseService->returnResponse('error',$exception->getMessage());
        }
    }


    /**
     * @Route("/user/{id}", name="get_user")
     * @Method("GET")
     */
    public function getUserAction($id)
    {
        $this->setParams();

        //find One user by Id
        try {
            $user =  $this->userRep->createQueryBuilder("users")
                ->where('users.id = :id')
                ->setParameter('id',$id)
                ->getQuery()
                ->getArrayResult();


            if($user) {
                return $this->responseService->returnResponse('success','Users result', $user);
            }

            return $this->responseService->returnResponse('error','User not found');

        } catch (\Exception $exception) {
            return $this->responseService->returnResponse('error',$exception->getMessage());
        }
    }

    /**
     * @Route("/user/{id}", name="update_user")
     * @Method("POST")
     */
    public function updateOneAction(Request $request, LoggerInterface $logger, $id)
    {
        $this->setParams();

         //Update User firstname and lastname by Id
        try {
            $user = $this->userRep->find($id);

            if($user) {
                $updateLogInfo = [];

                //get old and new data for user to save in log file
                if($request->get('firstname')) {
                    $updateLogInfo['firstname'] = [
                        'old' => $user->getFirstname(),
                        'new' => $request->get('firstname')
                    ];
                    $user->setFirstname($request->get('firstname'));
                }

                if($request->get('lastname')) {
                    $updateLogInfo['lastname'] = [
                        'old' => $user->getLastname(),
                        'new' => $request->get('lastname')
                    ];
                    $user->setLastname($request->get('lastname'));
                }

                $errors = $this->get('validator')->validate($user);

                if (count($errors) > 0) {
                    return $this->responseService->returnResponse('error','Validation Error',$errors);
                }

                $this->em->merge($user);
                $this->em->flush();


                $user =  $this->userRep->createQueryBuilder("users")
                    ->where('users.id = :id')
                    ->setParameter('id',$id)
                    ->getQuery()
                    ->getArrayResult();

                //content for log file
                $logger->info("User with id ".$id." updated -> ".json_encode($updateLogInfo));

                return $this->responseService->returnResponse('success','User Updated',$user);
            }

            return $this->responseService->returnResponse('error','User not found');

        } catch (\Exception $exception) {
            return $this->responseService->returnResponse('error',$exception->getMessage());
        }

    }

    /**
     * @Route("/user/{id}", name="delete_user")
     * @Method("DELETE")
     */
    public function deleteUserAction($id,LoggerInterface $logger)
    {
        $this->setParams();

        try {
        //find and delet user by id
            $user =  $this->userRep->find($id);

            if($user) {
                $this->em = $this->getDoctrine()->getManager();
                $this->em->remove($user);
                $this->em->flush();
                $logger->info("User with ID ".$id." deleted");
                return $this->responseService->returnResponse('success','Users deleted');
            }

            return $this->responseService->returnResponse('error','User not found');

        } catch (\Exception $exception) {
            return $this->responseService->returnResponse('error',$exception->getMessage());
        }
    }
}
