
jQuery(document).ready(function($) {
    /**
     * Script pour que le footer soit toujours en bas de page :
     */
    function footerAlwayInBottom(footerSelector) {
        var docHeight = $(window).height();
        var footerTop = footerSelector.position().top + footerSelector.height();
        if (footerTop < docHeight) {
            footerSelector.css("margin-top", (docHeight - footerTop) + "px");
        }
    }

    // S'applique au chargement de la page :
    footerAlwayInBottom($("footer"));
    // S'applique lorsque la page est redimensionnée :
    $(window).resize(function() {
        footerAlwayInBottom($("footer"));
    });
});