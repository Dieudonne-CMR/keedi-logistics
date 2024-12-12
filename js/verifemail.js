
        function validateEmail() {
          const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
          email = document.getElementById('email').value;
        if (regex.test(email)) {
                document.getElementById('errorMessage').style.display = 'none';
                return true;
            } else {
                // document.getElementById('errorMessage').textContent = "L'email n'est pas valide. Veuillez entrer un email correct.";
                // document.getElementById('errorMessage').style.display = 'block';
                document.getElementById('errorMessage').style.display = 'none';
                alert("L'email est invalide !");
                return false;
            }
        }