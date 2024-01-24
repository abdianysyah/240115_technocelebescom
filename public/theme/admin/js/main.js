 function dropHandler(event) {
        event.preventDefault();

        if (event.dataTransfer.items) {
            for (let i = 0; i < event.dataTransfer.items.length; i++) {
                if (event.dataTransfer.items[i].kind === 'file') {
                    const file = event.dataTransfer.items[i].getAsFile();
                    displayImage(file);
                }
            }
        } else {
            for (let i = 0; i < event.dataTransfer.files.length; i++) {
                displayImage(event.dataTransfer.files[i]);
            }
        }
    }

    function dragOverHandler(event) {
        event.preventDefault();
    }

    function handleFileSelect(event) {
        const file = event.target.files[0];
        displayImage(file);
    }

    function displayImage(file) {
        const previewImage = document.getElementById('preview-image');
        const dropArea = document.querySelector('.drop-area');

        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();

            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
                dropArea.classList.add('border-success');
            };

            reader.readAsDataURL(file);
        } else {
            alert('Invalid file format. Please choose an image.');
        }
    }