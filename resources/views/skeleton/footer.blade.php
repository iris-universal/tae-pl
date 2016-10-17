        <footer>
            ---
        </footer>
        
        <script>
            var callID = "{{$callID or 0}}";
        </script>

        <script src="{{ URL::to('js/jquery/jquery-3.1.1.min.js') }}"></script>
        <script src="http://cdn.peerjs.com/0.3/peer.min.js"></script>
        <script src="https://webrtc.github.io/adapter/adapter-latest.js" ></script>
        <script src="{{ URL::to($callScript) }}"></script>
    </body>

</html>