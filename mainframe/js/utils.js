// < SERVER_HTTP_HOST
        function _dir() {
                var url = window.location.href;
                url = url.replace("http://", "");

                var urlExplode = url.split("/");
                var serverName = urlExplode[0];

                serverName = 'http://' + serverName + '/';
                return serverName;
        }
// > SERVER_HTTP_HOST END

var action = _dir() + "citation/mainframe/actions.php";
var loader = _dir() + "citation/assets/imgs/loader.gif";

function verificaEmail(sEmail) {
        // filtros
        var emailFilter = /^.+@.+\..{2,}$/;
        var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/;
        // condição
        if (!(emailFilter.test(sEmail)) || sEmail.match(illegalChars)) {
                return false;
        } else {
                return true;
        }
}