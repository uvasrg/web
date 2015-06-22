<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Dependencies -->
    <?php include 'dependencies.php';?>
    <script src="js/twofactorJS.js"></script>
</head>

<body>
    <?php include 'header.php';?>
    <br>
    <div class="container-fluid">
        <div class="row" style="text-align:center;">
            <div class="col-md-8 col-md-offset-2">
                <h1>Two Factor Authentication</h1>
            </div>
        </div>
        <div class="row">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Two Factor Authentication</h2>
                    Having a strong password is one way to avoid having one's account being compromised on the internet. Two factor authentication is another way to greatly increase the security on an account. Two factor authentication contains two of three things
                    <ul>
                        <li>Something you are (fingerprint)</li>
                        <li>Something you have (generated key from an app or a security card)</li>
                        <li>Something you know (password or an answer to a question)</li>
                    </ul>
                    Two factor authentication is usually a password and a generated one time use key. This key can be sent by a text message or accessed by an app on one's phone or other key generating device. If a hacker does obtain access to a password, two factor makes the hacker still most likely unable to access the account, the hacker won't have access to the one time key which is required to log in.
                    <br>
                    <br>There are some disadvantages to two factor authentication. If the device is ever lost, then the user cannot access their account and has to go through a process in order to reset the account, though as precaution against this some services offer backup codes that can be printed and stored in a wallet. The device also has to be around at all times with the user.
                    <br>
                    <br>A couple great Two Factor Authentication apps are <a href="https://www.google.com/landing/2step/">Google Authenticator</a> and <a href="https://www.authy.com/users">Authy</a>.
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Sample Login Using 2FA</h2>
                    <p>Below is a simple example of how Two Factor Authentication works when logging into a website. The username and password are the pieces that you <b>know</b> while the generated 6-digit code is something you <b>have</b>. In a real world example, the code would be generated by an app on your smartphone or security card, not given to you on the website. Try logging in with the credentials below to see how it works.</p>
                    Username:
                    <input type="text" value="SuretySecurity" id="username">Password:
                    <input type="text" value="helloworld" id="password">
                    <button type="button" id="login1" class="btn btn-primary" data-toggle="modal" data-target="#entercode">Login</button>

                    <div class="alert alert-info text-center" role="alert" id="response">
                        <strong>Attention! </strong>You have not been validated. Please log in.
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>

        <div class="modal fade" id="entercode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="exampleModalLabel">Please enter authentication code:</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="message-text" id="message-intro" class="control-label"></label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="login2" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include 'footer.php';?>
    </div>
</body>