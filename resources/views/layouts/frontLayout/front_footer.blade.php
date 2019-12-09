<div id="pre-footer">
        <div id="pre-footer-divider"></div>
        <div id="pre-footer-container">
            <div class="pre-footer-col">
                <h3>TAGS</h3>
                <div id="tags">
                    {{-- <span class="tag">64 audio</span>
                    <span class="tag">Feliks Audio</span>
                    <span class="tag">Audio-gd</span>
                    <span class="tag">Woo Audio</span>
                    <span class="tag">DNA</span>
                    <span class="tag">Schiit Audio</span>
                    <span class="tag">Holo Spring</span>
                    <span class="tag">CanJam</span>
                    <span class="tag">Gustard</span> --}}
                    @foreach($tags as $tag)
                    <span class="tag"><a href="{{ url('tags/'.$tag->name) }}">{{ $tag->name }}</a></span>
                    @endforeach
                </div>
            </div>
            <div class="pre-footer-col">
                <h3>LATEST COMMENTS</h3>
                <div id="footer-comments">
                    <div class="comment">
                        <div class="comment-details">
                            <span class="comment-number">1</span>
                            <p class="comment-name">ELECTROSTATIC</p>
                            <p class="comment-thread">Review: Feliks Audio Elise</p>
                        </div>
                        <div class="comment-text">
                            This is really cool post..:)
                        </div>
                    </div>
                    <div class="comment">
                        <div class="comment-details">
                            <span class="comment-number">2</span>
                            <p class="comment-name">ELECTROSTATIC</p>
                            <p class="comment-thread">Review: Feliks Audio Elise</p>
                        </div>
                        <div class="comment-text">
                            This is really cool post..:)
                        </div>
                    </div>
                    <div class="comment">
                        <div class="comment-details">
                            <span class="comment-number">3</span>
                            <p class="comment-name">ELECTROSTATIC</p>
                            <p class="comment-thread">Review: Feliks Audio Elise</p>
                        </div>
                        <div class="comment-text">
                            This is really cool post..:)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="footer-actual-col">Copyright 2019 <span class="dot">.</span> ideality-sound <span class="dot">.</span> All Rights Reserved</div>
        <div class="footer-actual-col">
            <nav>
                <ul>
                    <li>Privacy Policy</li>
                    <li>Contact Us</li>
                    <li>Disclaimer/Copyright</li>
                    <li>About</li>
                    <li><i class="fab fa-youtube"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-facebook"></i></li>
                </ul>
            </nav>
        </div>
    
    </footer>