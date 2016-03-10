<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Errors
    |--------------------------------------------------------------------------
    */

    'bad_request' => [
        'title'  => 'The server cannot or will not process the request due to something that is perceived to be a client error.',
        'detail' => 'Your request had an error. Please try again.'
    ],

    'forbidden' => [
        'title'  => 'The request was a valid request, but the server is refusing to respond to it.',
        'detail' => 'Your request was valid, but you are not authorised to perform that action.'
    ],

    'not_found' => [
        'title'  => 'The requested resource could not be found but may be available again in the future. Subsequent requests by the client are permissible.',
        'detail' => 'The resource you were looking for was not found.'
    ],

    'precondition_failed' => [
        'title'  => 'The server does not meet one of the preconditions that the requester put on the request.',
        'detail' => 'Your request did not satisfy the required preconditions.'
    ],



    'invalid_sort' => [
        'title'  => 'Invalid Query Parameter.',
        'detail' => 'The resource `%s` does not have an `%s` sorting option.',
        'source' => '%s',
    ],

    'invalid_filter' => [
        'title'  => 'Invalid Query Parameter.',
        'detail' => 'The resource `%s` does not have an `%s` filter option.',
        'source' => '%s',
    ],

    'invalid_include' => [
        'title'  => 'Invalid Query Parameter',
        'detail' => 'The resource `%s` does not have an `%s` relationship path.',
        'source' => '%s',
    ],

    'invalid_get' => [
        'title'  => 'Invalid Query Parameter',
        'detail' => '%s is not an allowed query parameter.',
        'source' => '%s',
    ],

    /*
    |--------------------------------------------------------------------------
    | User Errors
    |--------------------------------------------------------------------------
    */

    'user_does_not_belong_to_group' => [
        'title'  => 'The user does not belong to the group',
        'detail' => 'User %s does not belong to Group %s'
    ],



];
