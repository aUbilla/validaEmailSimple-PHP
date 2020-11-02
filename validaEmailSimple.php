<?php

/**
 * Validador de Email simple.
 *
 * @param $email
 * @return bool
 */

function validaEmail($email) {
    return (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}
