<?php
include_once 'config.php';
include_once 'oauth-php/library/OAuthStore.php';
include_once 'oauth-php/library/OAuthServer.php';
include_once 'oauth-php/library/OAuthRequestVerifier.php';
echo "客户端提交:<pre>";
echo "\nPOST\n";
print_r($_POST);
echo "\nGET\n";
print_r($_GET);
echo "\nserver\n";
print_r($_SERVER);
echo "</pre>";
$store = OAuthStore::instance('MySQL', $dbOptions); 
$server = new OAuthServer();
if (OAuthRequestVerifier::requestIsSigned())
{
        try
        {
                $req = new OAuthRequestVerifier();
                $user_id = $req->verify();

                // If we have an user_id, then login as that user (for this request)
                if ($user_id)
                {
                    echo "user_id:goggogogog,".$user_id;
                        // **** Add your own code here ****
                }
        }
        catch (OAuthException $e)
        {
                // The request was signed, but failed verification
                header('HTTP/1.1 401 Unauthorized');
                header('WWW-Authenticate: OAuth realm=""');
                header('Content-Type: text/plain; charset=utf8');
                                        
                echo $e->getMessage();
                exit();
        }
}
