$(document).ready(function() {

    $('#slider-redes').layerSlider({
        sliderVersion: '6.6.4',
        type: 'popup',
        skin: 'noskin',
        globalBGSize: 'cover',
        navPrevNext: false,
        hoverPrevNext: false,
        navStartStop: false,
        navButtons: false,
        showCircleTimer: false,
        popupShowOnTimeout: 1,
        popupShowOnce: false,
        popupDisableOverlay: true,
        popupShowCloseButton: false,
        popupOverlayClickToClose: false,
        popupStartSliderImmediately: true,
        popupPositionHorizontal: 'left',
        popupDistanceLeft: 0,
        popupDistanceRight: 0,
        popupDistanceTop: 0,
        popupDistanceBottom: 0,
        popupDelayIn: 0,
        popupTransitionIn: 'slidefromleft',
        popupTransitionOut: 'slidetoleft',
        skinsPath: 'skins/',
        plugins: ["popup"]
    });

    $('#slider-inicio').layerSlider({
        createdWith: '6.6.048',
        sliderVersion: '6.11.1',
        type: 'fullsize',
        maxRatio: 1,
        pauseOnHover: 'disabled',
        skin: 'v6',
        navStartStop: false,
        showBarTimer: true,
        showCircleTimer: false,
        useSrcset: false,
        skinsPath: 'skins/',
        height: 650
    });
});

/* Chat Bitrix24 */
(function(w,d,u){
        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
})(window,document,'https://cdn.bitrix24.com/b15248325/crm/site_button/loader_8_1juj20.js');
/* /Chat Bitrix24 */

/* Rastreo Bitrix */
(function(w,d,u){
var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
})(window,document,'https://cdn.bitrix24.com/b15248325/crm/tag/call.tracker.js');
/* /Rastreo Bitrix */



/* Simplelightbox */
$(function() {
    var $gallery = $('.gallery a').simpleLightbox();

    $gallery.on('show.simplelightbox', function() {
            console.log('Requested for showing');
        })
        .on('shown.simplelightbox', function() {
            console.log('Shown');
        })
        .on('close.simplelightbox', function() {
            console.log('Requested for closing');
        })
        .on('closed.simplelightbox', function() {
            console.log('Closed');
        })
        .on('change.simplelightbox', function() {
            console.log('Requested for change');
        })
        .on('next.simplelightbox', function() {
            console.log('Requested for next');
        })
        .on('prev.simplelightbox', function() {
            console.log('Requested for prev');
        })
        .on('nextImageLoaded.simplelightbox', function() {
            console.log('Next image loaded');
        })
        .on('prevImageLoaded.simplelightbox', function() {
            console.log('Prev image loaded');
        })
        .on('changed.simplelightbox', function() {
            console.log('Image changed');
        })
        .on('nextDone.simplelightbox', function() {
            console.log('Image changed to next');
        })
        .on('prevDone.simplelightbox', function() {
            console.log('Image changed to prev');
        })
        .on('error.simplelightbox', function(e) {
            console.log('No image found, go to the next/prev');
            console.log(e);
        });
});
/* /Simplelightbox */
