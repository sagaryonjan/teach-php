<html>

<style>
    .error {
        color: red
    }
</style>

<body>

    <?php

        $full_name = '';
        $email = '';
        $website = '';
        $about_you = '';
        $mobile_number = '';
        $gender = '';
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $full_name = $_POST['full_name'];
            $email = $_POST['email'];
            $website = $_POST['website'];
            $about_you = $_POST['about_you'];
            $mobile_number = $_POST['mobile_number'];
            $gender = $_POST['gender'];

            if (empty($full_name)) {
                $errors['full_name'] = 'Full name is required.';
            }

            if (empty($email)) {
                $errors['email'] = 'Email is required.';
            }

            if (empty($website)) {
                $errors['website'] = 'Website is required.';
            }

            if (empty($about_you)) {
                $errors['about_you'] = 'About you is required.';
            }
        }

        /**
         * Erro Display
         */
        function errorDisplay($errors, $field)
        {
            $error_html = '';
            if (isset($errors[$field])) {
                $error_html = '<span class="error">* ' . $errors[$field] . '</span>';
            }
            return $error_html;
        }

    ?>
    <br><br>

    <form
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
        method="POST">

        Full Name: <input type="text" name="full_name"
            value="<?php echo $full_name; ?>">
        <?php echo errorDisplay($errors, 'full_name'); ?>
        <br><br>

        E-mail: <input type="email" name="email"
            value="<?php echo $email;?>">
        <?php echo errorDisplay($errors, 'email');?>
        <br><br>


        Website: <input type="url" name="website"
            value="<?php echo $website;?>">
        <?php echo errorDisplay($errors, 'website'); ?>

        <br><br>

        Mobile Number: <input type="number" min="1" name="mobile_number"
            value="<?php echo $mobile_number;?>"><br><br>

        About You: <textarea name="about_you" rows="5"
            cols="40"><?php echo stripslashes($about_you); ?></textarea>
        <br><br>

        Gender:
        <input type="radio" name="gender" value="female" <?php echo $gender == 'female' ? 'checked' : '';  ?>
        >Female
        <input type="radio" name="gender" value="male" <?php echo $gender == 'male' ? 'checked' : '';?>
        >Male
        <input type="radio" name="gender" value="other" <?php echo $gender == 'other' ? 'checked' : ''; ?>
        >Other
        <hr />

        <input type="submit">
    </form>

</body>

</html>