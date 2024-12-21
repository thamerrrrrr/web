
function showLoginForm() {
    document.getElementById("questionContainer").style.display = "none";
    document.getElementById("loginContainer").style.display = "block";
}

function showCreateAccountForm() {
    document.getElementById("questionContainer").style.display = "none";
    document.getElementById("createAccountContainer").style.display = "block";
}

// Image preview for profile photo
const profilePhotoInput = document.getElementById('profilePhoto');
const imagePreview = document.getElementById('imagePreview');
const imageElement = imagePreview.querySelector('img');
const textElement = imagePreview.querySelector('span');

profilePhotoInput.addEventListener('change', function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.addEventListener('load', function () {
            imageElement.setAttribute('src', this.result);
            imageElement.style.display = 'block';
            textElement.style.display = 'none';
        });
        reader.readAsDataURL(file);
    } else {
        imageElement.style.display = 'none';
        textElement.style.display = 'block';
    }
});

imagePreview.addEventListener('click', function() {
    profilePhotoInput.click(); 
});

// Image preview for additional file
const additionalFileInput = document.getElementById('additionalFile');
const filePreview = document.getElementById('filePreview');
const filePreviewText = filePreview.querySelector('span');

filePreview.addEventListener('click', function () {
    additionalFileInput.click();
});

additionalFileInput.addEventListener('change', function () {
    const file = this.files[0];
    if (file) {
        filePreviewText.textContent = File selected: ${file.name};
    } else {
        filePreviewText.textContent = "Choose an additional file";
    }
});
