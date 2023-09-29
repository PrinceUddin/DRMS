// script.js

document.addEventListener("DOMContentLoaded", function () {
    const scanButton = document.getElementById("scanButton");

    scanButton.addEventListener("click", function () {
        // Define the constraints for accessing the device's camera
        const constraints = {
            video: true,
        };

        // Access the user's camera and start scanning
        navigator.mediaDevices
            .getUserMedia(constraints)
            .then(function (stream) {
                // Attach the camera stream to a video element
                const video = document.createElement("video");
                document.body.appendChild(video);
                video.srcObject = stream;
                video.play();

                // Initialize QuaggaJS for barcode scanning
                Quagga.init(
                    {
                        inputStream: {
                            name: "Live",
                            type: "LiveStream",
                            target: video,
                        },
                        decoder: {
                            readers: ["ean_reader"],
                        },
                    },
                    function (err) {
                        if (err) {
                            console.error(err);
                            return;
                        }

                        // Start the barcode scanning
                        Quagga.start();
                    }
                );

                // Add an event listener for successful barcode detection
                Quagga.onDetected(function (result) {
                    // Stop the scanning
                    Quagga.stop();

                    // Redirect to the index.html page
                    window.location.href = "index.html?barcode=" + result.code;
                });
            })
            .catch(function (error) {
                console.error(error);
            });
    });
});
