<?php
    require_once "auther_access.php";
    require_once "header.php"; 
    require_once "navbar.php";
?>
<body>
    <div class="indent">
        <div class="form-ticket">
            <form action="send_information "class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                    <label name="first-name" for="validationTooltip01">First name</label>
                    <input type="text" class="form-control" id="validationTooltip01" placeholder="Mark" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                    </div>
                    <div class="col-md-4 mb-3">
                    <label name="last-name" for="validationTooltip02">Last name</label>
                    <input type="text" class="form-control" id="validationTooltip02" placeholder="Otto" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                    </div>
                    <div class="col-md-4 mb-3">
                    <label name="username-ticket"for="validationTooltipUsername">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                        <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                        </div>
                    </div>
                    </div>
                </div>
                <div class=form-row>
                    <textarea class="ticket-message" name="ticket-message" id="ticket-message" cols="30" rows="10" placeholder="input your message">
                        
                    </textarea>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </div>
</body>