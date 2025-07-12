<x-app-layout>
    

    <x-slot name="header">
    <div class="bg-dark py-3 px-4 rounded shadow" style="background-color:rgb(57, 60, 99);">
        <h2 class="text-white text-2xl font-bold m-0">
            📊 CMS Dashboard
        </h2>
    </div>
</x-slot>

<br>
<br>
    <div class="py-10">
        <div class="container">
            <!-- <div class="row g-4 justify-content-center"> -->

            <div class="row row-cols-1 row-cols-md-3 g-4">


                <!-- Students Card -->
                <div class="col-md-4">
                    <div class="card text-white shadow" style="background-color: #1e293b;">
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bold">👨‍🎓 Total Student</h4>
                            <p class="card-text fs-2">{{ $studentsCount }}</p>
                        </div>
                    </div>
                </div>

                <!-- Courses Card -->
                <div class="col-md-4">
                    <div class="card text-white shadow" style="background-color:rgb(34, 42, 63);">
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bold">📚 Total Course</h4>
                            <p class="card-text fs-2">{{ $coursesCount }}</p>
                        </div>
                    </div>
                </div>

                <!-- Faculty Card -->
                <div class="col-md-4">
                    <div class="card text-white shadow" style="background-color: #1e293b;">
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bold">👩‍🏫 Total Faculty</h4>
                            <p class="card-text fs-2">{{ $facultyCount }}</p>
                        </div>
                    </div>
                </div>

            </div> <!-- row end -->
        </div>
    </div>
</x-app-layout>
