<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <title>simletask</title> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/welc.css') }}">
</head>
<body>
 <div class="background-3d">
        <spline-viewer url="https://prod.spline.design/18wBcSoPufiO0VvQ/scene.splinecode"></spline-viewer>
    </div>

 @if(session('success'))
    <div class="suces" id="success-message">
        {{ session('success') }}
    </div>

    <script>
        setTimeout(function() {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 5000); // 5000 milliseconds = 5 seconds
    </script>
@endif

<section class="navbar">
        <div class="logo">
            <h2>Adarsh</h2>
        </div>

        <div class="profile">
            <a href="https://adarsh119005.github.io/webpage/">Profile</a>
        </div>
</section>


<section class="hero">
   <div class="head">
        <h1>Web Developer</h1>
        <p class="para">This Laravel project uses MySQL as its database 
            system for storing and managing data.
            MySQL is integrated via Laravel's Eloquent ORM for 
            efficient and secure database operations.</p>
    </div>


    <div class="form">
      
        <form method="POST" action="{{ route('notes-store') }}">
          @csrf
            <h1>Make Your Notes</h1>
            <input type="text" class="input" name="title" required placeholder="Your Title" /><br/>
              @if ($errors->any())
                <div style="color: red; margin-bottom: 15px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <textarea name="note" class="input" required placeholder="Your Notes"></textarea><br/>
            <button class="btn" type="submit">Submit</button>
        </form>
    </div>

<br/><br/>


     @foreach ($notes as $note)
        <div style="margin: 20px; padding: 10px; position: relative;">
            <div>
                <p><strong>Date:</strong> {{ $note->date }}</p>
                <p><strong>Title:</strong> {{ $note->title }}</p>
                <p><strong>Note:</strong> {{ $note->note }}</p>
            </div>
            <form action="{{ route('notes.destroy', $note->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this note?');" style="position: absolute; top: 10px; right: 10px;">
                @csrf
                @method('DELETE')
                <button type="submit" style="background:none; color:rgb(226, 5, 189); padding:5px 10px; border:none; cursor:pointer;"><i class="fa-solid fa-trash" style="font-size: 20px;"></i></button>
            </form><br/>
            <hr/>
        </div>
        
    @endforeach
</section>

<script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.92/build/spline-viewer.js"></script>




</body>
</html>