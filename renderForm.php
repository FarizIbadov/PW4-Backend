<?php
    function renderForm($array=null){
        echo '
            <form action="action.php" novalidate method="post"  class="form" id="form">
                    <h1 class="form-title">Customer Form</h1>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <select name="title" id="title" default="1">
                                <option value="1">Mr</option>
                                <option value="2">Mrs</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input type="text" max="30" id="firstname" name="firstname" required>
                        </div>
                
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" max="30" id="lastname" name="lastname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="tel" name="phone" id="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="address">City</label>
                        <input type="text" name="city" id="city" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" required>
                    </div>

                    <div class="form-group">
                        <label for="zip">Zip Code</label>
                        <input type="text" max="10" name="zip" id="zip" required>
                    </div>

                    <div class="form-group">
                        <button class="form-btn"  id="button" type="submit">Submit</button>
                    </div>
                </form>
        
        ';
    }
?>