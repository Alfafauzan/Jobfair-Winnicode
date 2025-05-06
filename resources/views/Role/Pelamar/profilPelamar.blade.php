@extends('layouts.pelamar')



@section('content')




<div class="Profil-pelamar">
    <div class="user-header">
        <img class="avatar" src="{{ $user->photo_url ?? 'https://i.pravatar.cc/150?img=3' }}" alt="Profile Picture">
        <span class="user-name">Muhammad Alfa Fauzan</span>
      </div>
      

  <div class="card-profil">
    <label>Bio</label>
    <p></p>

    <label>Alamat</label>
    <p></p>

    <label>CV</label>
    <div class="cv-input">
      <p></p>

        <a href="" target="_blank">Lihat CV</a>
  
    </div>
  </div>

  <div class="card-profil">
    <label>Work Preferences</label>
    <div class="work-type">
      <span>w</span>
    </div>

    <label>Skill</label>
    <p>skil</p>
  </div>

  <div class="card-profil">
    <label>Media Sosial</label>
    <div class="media-social-icons">
   
        <a href=""><i class="fab fa-twitter"></i></a>

 
        <a href=""><i class="fab fa-instagram"></i></a>
    
 
        <a href=""><i class="fab fa-linkedin"></i></a>
     
    </div>
  </div>

  <div class="edit-button">
    <a href="/editprofil">Edit Profile</a>
  </div>
</div>
@endsection
