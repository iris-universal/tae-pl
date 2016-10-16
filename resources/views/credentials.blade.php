@include('skeleton.header')

<form method="POST">
    
    <input type="text" name="name" placeholder="Name..." />
    <input type="email" name="email" placeholder="E-mail..." />
    
    <input type="submit" name="submit">
    
    {{ csrf_field() }}
</form>

@include('skeleton.footer')