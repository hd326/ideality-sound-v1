@extends('layouts.frontLayout.front_design')
@section('content')

<div id="review-image">
    <img src="images/yulongmain.jpg">
    <div id="review-info">
        <h1>YULONG A18/D18/U18 STACK REVIEW</h1>
        <i class="fas fa-user"></i> <span>Richard</span>
        <i class="fas fa-clock"></i> <span>December 02, 2019</span>
        <i class="fas fa-folder"></i> <span>$2000, AMP, DAC, Power Driver</span>
    </div>
</div>
<div id="review-columns">
    <div id="review">

        <h2>Intro</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet ex metus. Aliquam sit amet eros dictum, porttitor ante eu, lacinia libero. Aliquam eu finibus lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque in sodales elit, sit amet vulputate arcu. Cras dictum at nisl sed cursus. Duis mattis, augue in volutpat posuere, diam ante sodales enim, vitae placerat augue mi sed diam. Morbi auctor maximus sapien, ac congue lorem rhoncus luctus. Nam a lorem eu velit ullamcorper volutpat. Nulla facilisi. Donec ornare purus ut tempor venenatis. Phasellus at viverra augue, at sodales nibh. Phasellus venenatis metus finibus mi euismod fermentum.</p>

        <div id="self-rating">
            <span>Tonal Balance / Neutrality</span>
            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width:87%">
                </div>
            </div>
            <br>
            <span>Price / Performance Ratio</span>
            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width:78%">
                </div>
            </div>
            <br>
            <span>Sound Fidelity</span>
            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width:85%">
                </div>
            </div>
            <br>
            <span>Musicality</span>
            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width:96%">
                </div>
            </div>
            <br>
            <span>Build Quality</span>
            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width:79%">
                </div>
            </div>
            <br>
        </div>
        <h2>Specs</h2>
        <p>Vestibulum arcu lacus, hendrerit at sollicitudin luctus, congue vel tellus. Suspendisse interdum nulla quis urna dictum interdum. Duis sit amet turpis nec nisi tincidunt gravida in at risus. Sed est velit, porta eu turpis sed, tempus commodo dui. Nullam vitae consequat sapien, sed bibendum quam. Proin in felis hendrerit nibh ornare feugiat. Fusce ac posuere erat. Nullam non dui vitae urna pellentesque feugiat.</p>
        <h2>BUILD / DESIGN</h2>

        <p>Quisque pretium luctus fringilla. Etiam in risus erat. Etiam nunc leo, malesuada nec egestas convallis, ultrices a magna. Sed et lorem vel lorem sollicitudin interdum et in ante. Vestibulum venenatis, orci nec euismod pharetra, ante orci facilisis risus, sit amet tincidunt justo libero pulvinar nunc. Sed nibh ante, semper eget dui eget, finibus facilisis mi. Vestibulum hendrerit tellus eu nulla imperdiet, sed vehicula turpis pellentesque. Cras ullamcorper justo eu nisi porta consequat. Nam quis congue nulla. Donec ultrices ligula quam, a pellentesque tortor tempus id. Maecenas efficitur eu metus in posuere. Aliquam maximus felis in sollicitudin viverra. Nulla posuere quam vel turpis commodo maximus.</p>
        <h2>Sound</h2>
        <div id="specific-rating">
            <div class="specific-rating-column">
                <span>Bass Extension</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Bass Balance</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Lower Midrange Balance</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Midrange Proper Balance</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Upper Midrange Balance</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Treble Balance</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Treble Extension</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div>
            </div>
            <!-- second rating column -->
            <div class="specific-rating-column">
                <span>Bass Control</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Tone Density</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Macro Dynamics</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Micro Dynamics</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Sound Stage Width</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Sound Stage Depth</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Resolution</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div>
                <span>Clarity</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div>

            </div>
        </div>
        <p>Etiam ultrices nunc congue ipsum aliquam, et volutpat nibh pulvinar. Aliquam erat volutpat. Quisque vel efficitur tellus. Nunc luctus nisi eu ex varius cursus. Nulla quis semper est, eget volutpat metus. Nunc facilisis bibendum arcu, in rhoncus magna semper nec. Sed quis justo tristique, faucibus ante eget, finibus nibh. Sed consectetur tellus quis mauris elementum, id vestibulum nisl porta. Nullam et ante pellentesque, venenatis dui nec, pulvinar nibh. Cras luctus mollis libero, ultrices tincidunt lacus porttitor ac. Aliquam sodales ipsum lorem, quis vehicula lacus posuere eu. Aenean vehicula pretium odio, ac iaculis tellus dictum viverra. Sed a ligula et risus consectetur venenatis. Donec a lorem interdum, imperdiet lectus non, vehicula arcu. Aliquam erat volutpat.</p>
        <h2>Conclusion</h2>
        <p>Nunc at imperdiet tellus. Sed auctor ut ligula eu lobortis. Praesent consectetur lorem eu diam scelerisque tristique. Ut vitae orci at nibh convallis ullamcorper sed sit amet tortor. Donec sagittis turpis a egestas vestibulum. Phasellus sit amet posuere nulla. Donec mattis mollis quam ut porttitor. Duis elit diam, convallis ut ex sed, porta tristique lorem. Integer eu convallis quam, vel auctor sapien. In purus justo, fermentum vel blandit at, imperdiet sed lorem. Curabitur in sapien id eros imperdiet semper.</p>
        <nav>
            <ul>
                <li><i class="fab fa-facebook fa-2x" style="color:#3D549E"></i></li>
                <li><i class="fab fa-twitter fa-2x" style="color: #57AFE6"></i></li>
                <li><i class="fab fa-reddit fa-2x" style="color: #FF4500"></i></li>
                <li><i class="fab fa-pinterest fa-2x" style="color: #D0252C"></i></li>
                <li><i class="fas fa-envelope fa-2x" style="color: #adadad"></i></li>
            </ul>
        </nav>
        <div id="previous-next">
            <div id="previous"><i class="fas fa-long-arrow-alt-left"></i><br>Feliks Audio Elise: Review</div>
            <div id="next"><i class="fas fa-long-arrow-alt-right"></i><br>NFB 15.32: Review</div>
        </div>
        <div id="related-articles">
            <h2>Related Articles</h2>
            <div id="related-articles-container">
                <div class="related-articles-column">
                    <img src="/images/yulongmain.jpg">
                    <p class="related-date">December 2, 2019</p>
                    <h3>Review: Feliks Audio Elise</h3>

                </div>
                <div class="related-articles-column">
                    <img src="/images/yulongmain.jpg">
                    <p class="related-date">December 2, 2019</p>
                    <h3>Review: NFB 15.32</h3>
                </div>

            </div>

        </div>
        <div id="comments">

            <div id="number-comments">7 Comments</div>
            <hr id="number-comments-divider">

            <div class="comment">
                <div class="comment-info">
                    <div class="comment-column">
                        PIC
                    </div>
                    <div class="comment-column">
                        <span class="date">December 2, 2019</span><br><span class="name">Richard Duong</span>
                    </div>
                </div>
                <div class="comment-actual">
                    Etiam ultrices nunc congue ipsum aliquam, et volutpat nibh pulvinar. Aliquam erat volutpat. Quisque vel efficitur tellus. Nunc luctus nisi eu ex varius cursus. Nulla quis semper est, eget volutpat metus. Nunc facilisis bibendum arcu, in rhoncus magna semper nec. Sed quis justo tristique, faucibus ante eget, finibus nibh. Sed consectetur tellus quis mauris elementum, id vestibulum nisl porta.

                </div>
                <hr>
            </div>

        </div>

        <div id="leave-a-reply">
            Leave A Reply

            <hr id="leave-a-reply-divider">

            <span>Comment</span><br>
            <textarea></textarea>

            <span>Name *</span><br>
            <input type="text" name="name"><br>

            <span>Email *</span><br>
            <input type="text" name="email"><br>

            <span>Website</span><br>
            <input type="text" name="website"><br>

            <button>Post Comment</button>
        </div>
    </div>


    <div id="sponsors">
        <div class="sponsor">
            Sponsor Here
        </div>
        <div class="sponsor">
            Sponsor Here
        </div>
        <div class="sponsor">
            Sponsor Here
        </div>
    </div>
</div>

 @endsection