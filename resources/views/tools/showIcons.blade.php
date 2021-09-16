
<div class="card">
    <div class="card-header"> <h5>Banco de Iconos</h5> </div>
    <div class="card-block">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <input type="text" id="icon-search" class="form-control mb-4" placeholder="buscar . . ">
            </div>
        </div>
        <div class="i-main" id="icon-wrapper"></div>
    </div>
</div>


<script type="text/javascript">
    var iconlist = ['icon-alert-octagon', 'icon-alert-circle', 'icon-activity', 'icon-alert-triangle', 'icon-align-center', 'icon-airplay', 'icon-align-justify', 'icon-align-left', 'icon-align-right', 'icon-arrow-down-left',
        'icon-arrow-down-right', 'icon-anchor', 'icon-aperture', 'icon-arrow-left', 'icon-arrow-right', 'icon-arrow-down', 'icon-arrow-up-left', 'icon-arrow-up-right', 'icon-arrow-up', 'icon-award', 'icon-bar-chart', 'icon-at-sign',
        'icon-bar-chart-2', 'icon-battery-charging', 'icon-bell-off', 'icon-battery', 'icon-bluetooth', 'icon-bell', 'icon-book', 'icon-briefcase', 'icon-camera-off', 'icon-calendar', 'icon-bookmark', 'icon-box', 'icon-camera',
        'icon-check-circle', 'icon-check', 'icon-check-square', 'icon-cast', 'icon-chevron-down', 'icon-chevron-left', 'icon-chevron-right', 'icon-chevron-up', 'icon-chevrons-down', 'icon-chevrons-right', 'icon-chevrons-up',
        'icon-chevrons-left', 'icon-circle', 'icon-clipboard', 'icon-chrome', 'icon-clock', 'icon-cloud-lightning', 'icon-cloud-drizzle', 'icon-cloud-rain', 'icon-cloud-off', 'icon-codepen', 'icon-cloud-snow', 'icon-compass', 'icon-copy',
        'icon-corner-down-right', 'icon-corner-down-left', 'icon-corner-left-down', 'icon-corner-left-up', 'icon-corner-up-left', 'icon-corner-up-right', 'icon-corner-right-down', 'icon-corner-right-up', 'icon-cpu', 'icon-credit-card',
        'icon-crosshair', 'icon-disc', 'icon-delete', 'icon-download-cloud', 'icon-download', 'icon-droplet', 'icon-edit-2', 'icon-edit', 'icon-edit-1', 'icon-external-link', 'icon-eye', 'icon-feather', 'icon-facebook', 'icon-file-minus',
        'icon-eye-off', 'icon-fast-forward', 'icon-file-text', 'icon-film', 'icon-file', 'icon-file-plus', 'icon-folder', 'icon-filter', 'icon-flag', 'icon-globe', 'icon-grid', 'icon-heart', 'icon-home', 'icon-github', 'icon-image',
        'icon-inbox', 'icon-layers', 'icon-info', 'icon-instagram', 'icon-layout', 'icon-link-2', 'icon-life-buoy', 'icon-link', 'icon-log-in', 'icon-list', 'icon-lock', 'icon-log-out', 'icon-loader', 'icon-mail', 'icon-maximize-2',
        'icon-map', 'icon-map-pin', 'icon-menu', 'icon-message-circle', 'icon-message-square', 'icon-minimize-2', 'icon-mic-off', 'icon-minus-circle', 'icon-mic', 'icon-minus-square', 'icon-minus', 'icon-moon', 'icon-monitor',
        'icon-more-vertical', 'icon-more-horizontal', 'icon-move', 'icon-music', 'icon-navigation-2', 'icon-navigation', 'icon-octagon', 'icon-package', 'icon-pause-circle', 'icon-pause', 'icon-percent', 'icon-phone-call',
        'icon-phone-forwarded', 'icon-phone-missed', 'icon-phone-off', 'icon-phone-incoming', 'icon-phone', 'icon-phone-outgoing', 'icon-pie-chart', 'icon-play-circle', 'icon-play', 'icon-plus-square', 'icon-plus-circle', 'icon-plus',
        'icon-pocket', 'icon-printer', 'icon-power', 'icon-radio', 'icon-repeat', 'icon-refresh-ccw', 'icon-rewind', 'icon-rotate-ccw', 'icon-refresh-cw', 'icon-rotate-cw', 'icon-save', 'icon-search', 'icon-server', 'icon-scissors',
        'icon-share-2', 'icon-share', 'icon-shield', 'icon-settings', 'icon-skip-back', 'icon-shuffle', 'icon-sidebar', 'icon-skip-forward', 'icon-slack', 'icon-slash', 'icon-smartphone', 'icon-square', 'icon-speaker', 'icon-star',
        'icon-stop-circle', 'icon-sun', 'icon-sunrise', 'icon-tablet', 'icon-tag', 'icon-sunset', 'icon-target', 'icon-thermometer', 'icon-thumbs-up', 'icon-thumbs-down', 'icon-toggle-left', 'icon-toggle-right', 'icon-trash-2', 'icon-trash',
        'icon-trending-up', 'icon-trending-down', 'icon-triangle', 'icon-type', 'icon-twitter', 'icon-upload', 'icon-umbrella', 'icon-upload-cloud', 'icon-unlock', 'icon-user-check', 'icon-user-minus', 'icon-user-plus', 'icon-user-x',
        'icon-user', 'icon-users', 'icon-video-off', 'icon-video', 'icon-voicemail', 'icon-volume-x', 'icon-volume-2', 'icon-volume-1', 'icon-volume', 'icon-watch', 'icon-wifi', 'icon-x-square', 'icon-wind', 'icon-x', 'icon-x-circle',
        'icon-zap', 'icon-zoom-in', 'icon-zoom-out', 'icon-command', 'icon-cloud', 'icon-hash', 'icon-headphones', 'icon-underline', 'icon-italic', 'icon-bold', 'icon-crop', 'icon-help-circle', 'icon-paperclip', 'icon-shopping-cart',
        'icon-tv', 'icon-wifi-off', 'icon-minimize', 'icon-maximize', 'icon-gitlab', 'icon-sliders', 'icon-star-on', 'icon-heart-on'
    ];

    for (var i = 0, l = iconlist.length; i < l; i++) {
        $('#icon-wrapper').append(
            '<div class="i-block" data-clipboard-text="feather ' + iconlist[i] + '" data-filter="' + iconlist[i] + '"  data-toggle="tooltip" title="' + iconlist[i] + '">' +
            '<i class="feather ' + iconlist[i] + '"></i>' +
            '</div>');
    }

    iconlist = ['icon-user', 'icon-people', 'icon-user-female', 'icon-user-follow', 'icon-user-following', 'icon-user-unfollow', 'icon-login', 'icon-logout', 'icon-emotsmile', 'icon-phone', 'icon-call-end', 'icon-call-in', 'icon-call-out',
            'icon-map', 'icon-location-pin', 'icon-direction', 'icon-directions', 'icon-compass', 'icon-layers', 'icon-menu', 'icon-list', 'icon-options-vertical', 'icon-options', 'icon-arrow-down', 'icon-arrow-left', 'icon-arrow-right',
            'icon-arrow-up', 'icon-arrow-up-circle', 'icon-arrow-left-circle', 'icon-arrow-right-circle', 'icon-arrow-down-circle', 'icon-check', 'icon-clock', 'icon-plus', 'icon-minus', 'icon-close', 'icon-event', 'icon-exclamation',
            'icon-organization', 'icon-trophy', 'icon-screen-smartphone', 'icon-screen-desktop', 'icon-plane', 'icon-notebook', 'icon-mustache', 'icon-mouse', 'icon-magnet', 'icon-energy', 'icon-disc', 'icon-cursor', 'icon-cursor-move',
            'icon-crop', 'icon-chemistry', 'icon-speedometer', 'icon-shield', 'icon-screen-tablet', 'icon-magic-wand', 'icon-hourglass', 'icon-graduation', 'icon-ghost', 'icon-game-controller', 'icon-fire', 'icon-eyeglass', 'icon-envelope-open',
            'icon-envelope-letter', 'icon-bell', 'icon-badge', 'icon-anchor', 'icon-wallet', 'icon-vector', 'icon-speech', 'icon-puzzle', 'icon-printer', 'icon-present', 'icon-playlist', 'icon-pin', 'icon-picture', 'icon-handbag',
            'icon-globe-alt', 'icon-globe', 'icon-folder-alt', 'icon-folder', 'icon-film', 'icon-feed', 'icon-drop', 'icon-drawer', 'icon-docs', 'icon-doc', 'icon-diamond', 'icon-cup', 'icon-calculator', 'icon-bubbles', 'icon-briefcase',
            'icon-book-open', 'icon-basket-loaded', 'icon-basket', 'icon-bag', 'icon-action-undo', 'icon-action-redo', 'icon-wrench', 'icon-umbrella', 'icon-trash', 'icon-tag', 'icon-support', 'icon-frame', 'icon-size-fullscreen',
            'icon-size-actual', 'icon-shuffle', 'icon-share-alt', 'icon-share', 'icon-rocket', 'icon-question', 'icon-pie-chart', 'icon-pencil', 'icon-note', 'icon-loop', 'icon-home', 'icon-grid', 'icon-graph', 'icon-microphone',
            'icon-music-tone-alt', 'icon-music-tone', 'icon-earphones-alt', 'icon-earphones', 'icon-equalizer', 'icon-like', 'icon-dislike', 'icon-control-start', 'icon-control-rewind', 'icon-control-play', 'icon-control-pause',
            'icon-control-forward', 'icon-control-end', 'icon-volume-1', 'icon-volume-2', 'icon-volume-off', 'icon-calendar', 'icon-bulb', 'icon-chart', 'icon-ban', 'icon-bubble', 'icon-camrecorder', 'icon-camera', 'icon-cloud-download',
            'icon-cloud-upload', 'icon-envelope', 'icon-eye', 'icon-flag', 'icon-heart', 'icon-info', 'icon-key', 'icon-link', 'icon-lock', 'icon-lock-open', 'icon-magnifier', 'icon-magnifier-add', 'icon-magnifier-remove', 'icon-paper-clip',
            'icon-paper-plane', 'icon-power', 'icon-refresh', 'icon-reload', 'icon-settings', 'icon-star', 'icon-symbol-female', 'icon-symbol-male', 'icon-target', 'icon-credit-card', 'icon-paypal', 'icon-social-tumblr', 'icon-social-twitter',
            'icon-social-facebook', 'icon-social-instagram', 'icon-social-linkedin', 'icon-social-pinterest', 'icon-social-github', 'icon-social-google', 'icon-social-reddit', 'icon-social-skype', 'icon-social-dribbble', 'icon-social-behance',
            'icon-social-foursqare', 'icon-social-soundcloud', 'icon-social-spotify', 'icon-social-stumbleupon', 'icon-social-youtube', 'icon-social-dropbox', 'icon-social-vkontakte', 'icon-social-steam']

    for (var i = 0, l = iconlist.length; i < l; i++) {
        $('#icon-wrapper').append(
            '<div class="i-block" data-clipboard-text="simple-line sline-' + iconlist[i] + '" data-filter="' + iconlist[i] + '"  data-toggle="tooltip" title="' + iconlist[i] + '">' +
            '<i class="simple-line sline-' + iconlist[i] + '"></i>' +
            '</div>');

    }

    $(function() {

        $('.i-block').click(function(){
            if ($('[name="{{ $element }}"]'))
                $('[name="{{ $element }}"]').val( $(this).attr('data-clipboard-text'));
            else
                $('#{{ $element }}').val( $(this).attr('data-clipboard-text'));

            $('#{{ $element }}_Icon i').removeClass().addClass( $(this).attr('data-clipboard-text'));
            fn.closeModal();
        })

        $("#icon-search").on("keyup", function() {
            var g = $(this).val().toLowerCase();
            $(".i-main .i-block").each(function() {
                var t = $(this).attr('data-filter');
                if (t) {
                    var s = t.toLowerCase();
                }
                if (s) {
                    var n = s.indexOf(g);
                    if (n !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                }
            });
        });
    });


</script>


