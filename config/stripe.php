<?php

return [
    'secret_key' => env('STRIPE_SECRET', 'pk_test_51OtaswHt19kuUNDlPqQmgYvozeAO4UyXKaRXGQnMevPZzS9YXeJ9WOHzGkvtOKBlXmlmnHVV6Ps7F2VJW6Y2BROb00PHDOkxUc'),
    'public_key' => env('STRIPE_KEY', 'sk_test_51OtaswHt19kuUNDldpjPgFnIKuBv0ILNkLuNjy8G9PfYNXdj3iFISZOStgAdKjFpgOnTo44X1QVDfpB80cyTkubL00jxu8bSIL'),
    'currency' => env('STRIPE_CURRENCY', 'USD'),
];
