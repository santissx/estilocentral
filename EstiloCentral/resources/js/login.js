
        const btnCliente = document.getElementById('btn-cliente');
        const btnAdmin = document.getElementById('btn-admin');
        const loginTitle = document.getElementById('login-title');
        const loginBody = document.getElementById('login-body');
        const imageContainer = document.getElementById('image-container');
        const loginImage = document.getElementById('login-image');

        btnCliente.addEventListener('click', () => {
            loginTitle.textContent = '¡Bienvenido!';
            loginBody.className = 'bg-purple-custom';
            imageContainer.className = 'col-md-6 bg-purple-custom';
            loginImage.src = clienteImageUrl;
            loginImage.alt = "Imagen de cliente";
            btnCliente.className = 'btn btn-primary me-2';
            btnAdmin.className = 'btn btn-light';
        });

        btnAdmin.addEventListener('click', () => {
            loginTitle.textContent = '¡Bienvenido!';
            loginBody.className = 'bg-brown-custom';
            imageContainer.className = 'col-md-6 bg-brown-custom';
            loginImage.src = adminImageUrl;
            loginImage.alt = "Imagen de admin";
            btnAdmin.className = 'btn btn-primary me-2';
            btnCliente.className = 'btn btn-light';
        });
        console.log('El archivo login.js se ha cargado correctamente.');