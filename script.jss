$(document).ready(function () {
    $("#registrationForm").on("submit", function (event) {
        let valid = true;

        $("input, textarea").each(function () {
            if ($(this).val().trim() === "") {
                valid = false;
                alert("All fields are required. Please fill out the form completely.");
                return false;
            }
        });

        return valid; // Allow submission if valid
    });
});
