@include('skeleton.header')

<form method="POST">
    
    <input type="text" name="name" placeholder="Name..." />
    <input type="email" name="email" placeholder="E-mail..." />
    
    <input type="submit" name="submit">
    
    {{ csrf_field() }}
</form>

  <video id="localVideo" autoplay></video>
<video id="remoteVideo" autoplay></video>

<div>
  <button id="startButton">Start</button>
  <button id="callButton">Call</button>
  <button id="hangupButton">Hang Up</button>
</div>

@include('skeleton.footer')