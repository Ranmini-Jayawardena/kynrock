<?php

namespace App\Helpers;

class APIResponseMessage
{

    const ERROR_STATUS = "error";
    const SUCCESS_STATUS = "success";

    const ROUTE_NOT_FOUND = "The route you are trying to access not exists.";
    const UNAUTHORIZED = "Unauthorized. Access is denied due to invalid credentials.";
    const MODEL_NOT_FOUND = "Entity you are looking for not exists.";
    const HTTP_NOT_FOUND = "The route you are trying to access not exists.";
    const EMAIL_NOT_SEND = "Sorry! Please try again latter.";
    const PW_RESET_SUCCESS = "Password was successfully reset.";
    const INVALID_OR_INACTIVE_USER_FORGET_PW = "User In-active or invalid Email Address.";
    const PW_RESET_EMAIL_SUCCESS = "Password reset email sent.";
    const USER_LOCKED = "User Account Locked. Please Contact Administrator, Thank you.";
    const USER_DELETED = "User Account Deleted.";
    const INVALID_USER_NAME_PASSWORD = "Invalid email address.";
    const INVALID_EMAIL = "Invalid email address.";
    const NO_DATA = 'No data';
    const UPDATED = 'Successfully updated';
    const UPLOADED = 'Successfully uploaded';
    const UPLOAD_FAILED = 'Image upload failed';
    const ERROR_EXCEPTION = 'Failed the process';
    const DELETED = 'Successfully deleted';
    const RESTORE = 'Successfully restore';
    const CREATED = 'Successfully Saved';
    const DISPATCHED = 'Successfully Dispatched';
    const PAYMENT_FAILED = 'Payment Failed';
    const EMAIL_SENT = "Email send successfully.";
    const GENERATED = "Successfully generated";
    const DELETE_CANCEL = "Failed the process. Already assigned seafarers";
}
