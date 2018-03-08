@include('includes.head')
@include('includes.headerfooter')
<body>
<div class="slds-scope">
    <div>
        <div id="post" class="questions" style="    width: 100%;">
            
			{{--POSTS--}}
        @foreach ($post as $data)
            <div class="slds-card__header slds-grid">
                <div class="slds-feed" style="    width: 100%;">
                    <ul class="slds-feed__list">
                        <li class="slds-feed__item">
                            <article class="slds-post">
                                <header class="slds-post__header slds-media">
                                    <div class="slds-media__figure">
                                        <a href="javascript:void(0);"
                                           class="slds-avatar slds-avatar_circle slds-avatar_large">
                                            <img src="/assets/images/avatar1.jpg" />
                                        </a>
                                    </div>
                                    <div class="slds-media__body">
                                        <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate">
                                            <p>
                                                <a href="../post/{{$data->question_ID}}">{{$data->title}}</a>
                                                <br/>
                                                <a href="javascript:void(0);">{{$data->username}}</a>
                                            </p>
                                            <button class="slds-button slds-button_icon slds-button_icon-border slds-button_icon-x-small"
                                                    aria-haspopup="true" title="More Options">
                                                <svg class="slds-button__icon" aria-hidden="true">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"/>
                                                </svg>
                                                <span class="slds-assistive-text">More Options</span>
                                            </button>
                                        </div>
                                        <p class="slds-text-body_small"><a href="javascript:void(0);"
                                                                           title="Click for single-item view of this post"
                                                                           class="slds-text-link_reset">{{$data->create_time}}</a>
                                        </p>
                                    </div>
                                </header>
                                <div class="slds-post__content slds-text-longform">
                                    <p>
                                        {{$data->content}}
                                    </p>
                                </div>
                                <footer class="slds-post__footer">
                                    <ul class="slds-post__footer-actions-list slds-list_horizontal">
                                        <li class="slds-col slds-item slds-m-right_medium">
                                            <button title="Upvote this item"
                                                    class="slds-button_reset slds-post__footer-action"
                                                    aria-pressed="false">
                                                {{$data->upvotes}}
                                                <svg class="slds-icon slds-icon-text-default slds-icon_x-small slds-align-middle"
                                                     aria-hidden="true">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#share_mobile"/>
                                                </svg>
                                                Upvote
                                            </button>
                                        </li>
                                    </ul>
                                    <ul class="slds-post__footer-meta-list slds-list_horizontal slds-has-dividers_right slds-text-title">
                                        <li class="slds-item">{{$data->comments}} answers</li>
                                        <li class="slds-item">{{$data->views}} views</li>
                                    </ul>
                                </footer>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach
			
        </div>
    </div>
	
</div>
</body>
{{--Modal Inclusion--}}
@include('modals.login')
@include('modals.register')
@include('modals.userProfile')
<script src="{{ URL::asset('js/answer.js') }}" type="text/javascript"></script>