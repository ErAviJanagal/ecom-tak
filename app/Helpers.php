<?php
    use App\Http\Controllers\CatalogController;
    //checking if route is a active route then applying active class
    if (!function_exists('isActiveRoute')) {
        function isActiveRoute(array $routeNames):string
        {
            return in_array(Route::currentRouteName(), $routeNames) ? 'active open' : '';
        }
    }

    // funciton for encryption
    if (!function_exists('encrypt_value')) {
        function encrypt_value($data, string $encryptionMethod = null, string $secret = null)
        {
            if( empty($data) )
                return "";
            $encryptionMethod = config('app.encryptionMethod');
            $secret = config('app.secrect');
            try {
                $iv = substr($secret, 0, 16);
                $jsencodeUserdata = str_replace('/', '!', openssl_encrypt($data, $encryptionMethod, $secret, 0, $iv));
                $jsencodeUserdata = str_replace('+', '~', $jsencodeUserdata);
                return $jsencodeUserdata;
            } catch (\Exception $e) {
                return null;
            }
        }
    }

    // funciton for decryption
    if (!function_exists('decrypt_value')) {
        function decrypt_value($data, string $encryptionMethod = null, string $secret = null)
        {
            if( empty($data) )
                return null;
            $encryptionMethod = config('app.encryptionMethod');
            $secret = config('app.secrect');
            try {
                $iv = substr($secret, 0, 16);
                $data = str_replace('!', '/', $data);
                $data = str_replace('~', '+', $data);
                $jsencodeUserdata = openssl_decrypt($data, $encryptionMethod, $secret, 0, $iv);
                return $jsencodeUserdata;
            } catch (\Exception $e) {
                return null;
            }
        }
    }

    if (! function_exists('cart_count')) {
        function cart_count() {
            $controller = new CatalogController();
            return $controller->cart_count();
        }
    }
?>