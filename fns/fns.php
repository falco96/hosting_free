<?php
    class hosting_free{
        // variables

        private $name;
        private $surname;
        private $username;
        private $password;
        private $subdomain;
        private $email;
        private $remail;
        private $address;
        private $city;
        private $state;
        private $cap;
        private $cf;
        private $piva;

        // end variables

        public function __construct(){

        }

        public function head(){
            ?>
                <head>
                    <meta charset="utf-8">
                    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
                    <link rel="stylesheet" type="text/css" href="css/normalize.css">
                    <link rel="stylesheet" type="text/css" href="css/style.css">
                    <title>Hosting Free</title>
                </heas>
            <?php
        }

        public function js(){
            ?>
                <script src="js/main.js"></script>
            <?php
        }

        public function footer(){
            include 'components/footer.php';
            $this->js();
        }

        public function navbar(){
            include 'components/navbar.php';
        }  

        public function formSignUp(){
            include 'components/form-signup.php';
        } 

        public function presentation(){
            include 'components/presentation.php';
        }
        
        public function body(){
            ?>
                <div class="flex mb-4 first-components">
                    <div class="w-1/2 h-12"> <?php $this->presentation(); ?> </div>
                    <div class="w-1/2 h-12"> <?php $this->formSignUp(); ?> </div>
                </div>
            <?php
        }

        public function input(){
            if(isset($_POST['sign-up'])){
                $this->name = strip_tags($_POST['nome']);
                $this->surname = strip_tags($_POST['cognome']);
                $this->username = strip_tags($_POST['username']);
                $this->password = strip_tags($_POST['password']);
                $this->subdomain = strip_tags($_POST['sottodominio']);
                $this->email = strip_tags($_POST['email']);
                $this->remail = strip_tags($_POST['remail']);
                $this->address = strip_tags($_POST['indirizzo']);
                $this->city = strip_tags($_POST['city']);
                $this->state = strip_tags($_POST['state']);
                $this->cap = strip_tags($_POST['cap']);
                $this->cf = strip_tags($_POST['codice-fiscale']);
                $this->piva = strip_tags($_POST['piva']);

                // send data to db

                $id = $this->sendDB();

                // send email

                include 'components/sendEmail.php';

                // email a freedeveloper

                $result_us = $this->emailUS($id);

                // email to user

                $result_user = $this->emailToUser();
            }
            if(isset($_GET['id'])){
                $id = strip_tags($_GET['id']);
                $url = "https://sharekfile.com/hosting/see_hostingUsers.php?id=" . $id;
                header("Location: $url");
            }
        }

        public function sendDB(){
            global $conn;
            // set id
            $id = $name . $surname . $email . rand();
            $id = md5($id);

            // set registration date

            $date = date('y/m/d');

            // set password

            $this->password = hash('sha512', $this->password);

            $sql = "INSERT INTO users (id, name, surname, username, password, subdomain, email, remail, address, city, state, cap, cf, piva, date_registration)
            VALUES ('$id' , '$this->name', '$this->surname', '$this->username', '$this->password', '$this->subdomain', '$this->email', '$this->remail', '$this->address', '$this->city', '$this->state', '$this->cap', '$this->cf', '$this->piva', '$date')";
            $send = mysqli_query($conn, $sql) or die("Impossibile inserire i seguenti dati nel database");

            return $id;
        }

        public function emailUS($id){
            $email = "info@freedeveloper.it";
            $object = "Nuova registrazione al servizio hosting free di " . $this->name . " " . $this->surname;
            $textm = "<p>
            Nuova registrazione a nome di " . $this->name . " " . $this->surname . "</p>
            <p><h1> Qui di seguito tutti i dati </h1> </p>
            <p>
            Email: " . $this->email . "<br>
            Nome: " . $this->name . "<br>
            Cognome: " . $this->surname . "<br>
            Nome Sottodominio: " . $this->subdomain . ".host-falco96.com <br>
            Per tutte le altre informazioni: <a href='https://hosting.freedeveloper.it/?id=" . $id . "'> Clicca qui </a> </p>";
            $result = send_mail($email, $object, $textm);
            return $result;
        }

        public function emailToUser(){
            $email = $this->email;
            $object = "Conferma registrazione hosting";
            $textm = "<p>
            Ciao, <br>
            Ti confermiamo che hai completato con successo il processo di registrazione al servizio hosting. </p>
            <p>
            Qui un riepilogo dei dati che hai inserito: </p>
            <p>
            Nome: " . $this->name . "<br>
            Cognome: " . $this->surname . "<br>
            Email: " . $this->email . "<br>
            UserName: " . $this->username . "<br>
            Nome sottodominio: " . $this->subdomain . ".host-falco96.com </p>
            <p>
            Il servizio verrà attivato nelle prossime 2 ore. Se dovessi avere bisogno contattaci dal sito: <a href='https://freedeveloper.it'> Free Developer </a> </p>";
            $result = send_mail($email, $object, $textm);
            return $result;
        }

        public function debugForm(){
            if(isset($_POST['sign-up'])){
                echo "<p>" . $this->name . "</p>";
                echo "<p>" . $this->surname . "</p>";
                echo "<p>" . $this->username . "</p>";
                echo "<p>" . $this->password . "</p>";
                echo "<p>" . $this->subdomain . "</p>";
                echo "<p>" . $this->email . "</p>";
                echo "<p>" . $this->remail . "</p>";
                echo "<p>" . $this->address . "</p>";
                echo "<p>" . $this->city . "</p>";
                echo "<p>" . $this->state . "</p>";
                echo "<p>" . $this->cap . "</p>";
                echo "<p>" . $this->cf . "</p>";
                echo "<p>" . $this->piva . "</p>";
                exit;
            }
        }
    }
?>