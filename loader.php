<?php

/*
 * Copyright (c) Devinow (https://devinow.xyz/)
 */

$dir = __DIR__.'/src/';

require_once $dir.'UserManager.php';
require_once $dir.'Administration.php';
require_once $dir.'AuthException.php';
require_once $dir.'AmbiguousUsernameException.php';
require_once $dir.'AttemptCancelledException.php';
require_once $dir.'Auth.php';
require_once $dir.'AuthError.php';
require_once $dir.'ConfirmationRequestNotFound.php';
require_once $dir.'DatabaseError.php';
require_once $dir.'DuplicateUsernameException.php';
require_once $dir.'EmailNotVerifiedException.php';
require_once $dir.'EmailOrUsernameRequiredError.php';
require_once $dir.'HeadersAlreadySentError.php';
require_once $dir.'InvalidEmailException.php';
require_once $dir.'InvalidPasswordException.php';
require_once $dir.'InvalidSelectorTokenPairException.php';
require_once $dir.'MissingCallbackError.php';
require_once $dir.'NotLoggedInException.php';
require_once $dir.'ResetDisabledException.php';
require_once $dir.'Role.php';
require_once $dir.'Status.php';
require_once $dir.'TokenExpiredException.php';
require_once $dir.'TooManyRequestsException.php';
require_once $dir.'UnknownIdException.php';
require_once $dir.'UnknownUsernameException.php';
require_once $dir.'UserAlreadyExistsException.php';

?>
