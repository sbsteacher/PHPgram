(function() {
    const gData = document.querySelector('#gData');

    const btnFollow = document.querySelector('#btnFollow');
    if(btnFollow) {
        btnFollow.addEventListener('click', function() {
            const param = {
                toiuser: parseInt(gData.dataset.toiuser)
            };
            console.log(param);
            const follow = btnFollow.dataset.follow;
            console.log('follow : ' + follow);
            const followUrl = '/user/follow';
            switch(follow) {
                case '1': //팔로우 취소
                    fetch(followUrl + encodeQueryString(param), {method: 'DELETE'})
                    .then(res => res.json())
                    .then(res => {
                        console.log(res);
                    });
                    break;
                case '0': //팔로우 등록
                    break;
            }
        });
    }

})();