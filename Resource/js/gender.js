function selectGender(gender) {
    // Reset styles for all images
    document.querySelectorAll('.gender-image').forEach(function (img) {
        img.classList.remove('selected');
        img.classList.add('not-selected');
    });

    // Set styles for the selected image
    const selectedImage = document.getElementById(`gender-image-${gender}`);
    selectedImage.classList.remove('not-selected');
    selectedImage.classList.add('selected');
}