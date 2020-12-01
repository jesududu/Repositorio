<?php
return array(
    // set your paypal credential
    'client_id' => 'AUqhPDvyPuVp98WU3yB-YkgkTZZdXkNYJR7jTbS6psh2ERmzJmF6A42PkFnKrrbU_zfaPNX2fKAZdi-I',
    'secret' => 'EFycOn45V8APGfeyggxtxRN6PcW2dHNUuUjkynztuX5j8MDboCWQfYi9IqtVLR7LAd1a3d6Yg54ZH3Gf',

    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);