@include('skeleton.header')

<div class="page-container">
    
    <div id="top-bar" class="bar">
        
        {{ $callerID or 'Adam - Łódź' }}
        
    </div>
    
    <div id="middle-bar" class="bar">
        
        <form action="/overlay" method="POST">
            
            <input type="text" name="caller" />
            
            <input type="submit" name="submit" />
            
            {{ csrf_field() }}
            
        </form>        
        
    </div>
    
    <div id="bottom-bar" class="bar">
        
        kontakt@stacja-ateizm.pl
        
    </div>
    
</div>

@include('skeleton.footer')