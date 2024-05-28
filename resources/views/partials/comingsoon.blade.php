<div class="bg-gray-800">
    <div class="h-screen flex justify-center items-center px-2">
        <div class="bg-gray-900 max-w-lg mx-auto shadow-lg rounded-lg overflow-hidden">
            <div class="py-4 px-6">
                <h2 class="text-4xl font-bold text-gray-300 text-center">Coming Soon Insya Allah</h2>
                <p class="mt-2 text-lg text-gray-200">Kita sedang mengembangkan halaman ini jadi lebih baik.    </p>
            </div>
    
            <div class="py-4 px-6">
                <div class="flex flex-wrap gap-4 justify-center items-center">
                    <div class="border rounded-lg px-4 py-2">
                        <div id="days" class="font-bold font-mono text-md text-yellow-300"></div>
                    </div>
                    <div class="border rounded-lg px-4 py-2">
                        <div id="hours" class="font-bold font-mono text-md text-yellow-300"></div>
                    </div>
                    <div class="border rounded-lg px-4 py-2">
                        <div id="minutes" class="font-bold font-mono text-md text-yellow-300"></div>
                    </div>
                    <div class="border rounded-lg px-4 py-2">
                        <div id="seconds" class="font-bold font-mono text-md text-yellow-300"></div>
                    </div>
                </div>
            </div>
            <div class="flex mt-8 py-6 text-center justify-center mx-auto">
                <div class="bg-yellow-400 px-4 py-3 rounded-lg shadow-xl">
                    <a class="text-bold text-gray-900 font-semibold text-base text-center" href="/">Kembali ke Home</a>
                </div>
            </div>
        </div>
</div>




    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jun 14, 2024 00:00:00").getTime();

        // Update the countdown every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the corresponding elements
            document.getElementById("days").textContent = days + " hari";
            document.getElementById("hours").textContent = hours + " jam";
            document.getElementById("minutes").textContent = minutes + " menit";
            document.getElementById("seconds").textContent = seconds + " detik";


            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
</div>