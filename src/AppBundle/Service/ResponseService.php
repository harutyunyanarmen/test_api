<?php

namespace AppBundle\Service;


use Symfony\Component\HttpFoundation\JsonResponse;

class ResponseService
{

    function returnResponse($status,$message, $data = null) {
        $response = [
            'status' =>  $status,
            'message' =>  $message,
        ];

        if(!is_null($data)){
            if($status == 'error'){
                $response['errors'] = [];

                foreach ($data as $error) {
                    array_push($response['errors'], [
                        'field' => $error->getPropertyPath(),
                        'message' => $error->getMessageTemplate()
                    ]);
                }
            }elseif($status == 'success'){
                $response['result'] = $data;
            }
        }

        return new JsonResponse($response);
    }

}
