<div class="d-flex flex-column align-items-center">
    <div class="size_box_100"></div>
    <div class="w100p_mw614">
        <div class="d-flex flex-row">            
            <div class="d-flex flex-column justify-content-center">                
                <div class="circleimg h150 w150 pointer feedwin">                    
                    <img data-bs-toggle="modal" data-bs-target="#changeProfileImgModal" src='/static/img/profile/<?=$this->data->iuser?>/<?=$this->data->mainimg?>' onerror='this.error=null;this.src="/static/img/profile/defaultProfileImg_100.png"'>
                </div>
            </div>            
            <div></div>
        </div>
    </div>
</div>

<!-- 프로필 사진 바꾸기 -->
<div class="modal fade" id="changeProfileImgModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title bold">프로필 사진 바꾸기</h5>
            </div>
            <div class="_modal_item">
                <span class="c_primary-button bold pointer">사진 업로드</span>
            </div>
            <div class="_modal_item">
                <span class="c_error-or-destructive bold pointer">현재 사진 삭제</span>
            </div>
            <div class="_modal_item">
                <span class="pointer" data-bs-dismiss="modal">취소</span>
            </div>
        </div>
    </div>
</div>