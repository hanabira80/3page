<div class="modal-outer scroll-block">
	<div class="modal-mask js-modal-close">
	</div>
	<!-- modal-video -->
	<div class="modal modal-video xy-center" id="modal-video">
		<div class="ratio-inner">
			
		</div>
		<div class="close js-modal-close">
			<i class="material-icons">clear</i>
		</div>
	</div>
	<!-- modal-video end -->

	<!-- modal-pass -->
	<div class="modal modal-pass xy-center" id="modal-pass">
		<div class="tit-area">
			<div class="tit">비밀번호확인</div>
			<div class="close js-modal-close">
				<i class="material-icons">clear</i>
			</div>
		</div>
		<div class="ctn-area">
			<div class="txt">글 등록 시 입력한 글 비밀번호를 입력해주세요.</div>
			<div class="modal-form-box">
				<form name="">
					<input type="password" name="pass" autocomplete="new_password" validation="vali_text" alt="비밀번호" class="ipt">
					<input type="submit" name="" class="submit" value="확인">
					<div class="cancel js-modal-close">취소</div>
				</form>
			</div>
			<div class="info">
			비밀번호가 틀렸습니다. 다시 한번 입력해주세요.
			</div>
		</div>
	</div>
	<!-- modal-pass end -->

	<!-- modal-terms -->
	<div class="modal modal-document xy-center" id="modal-terms">
		<div class="tit-area">
			<div class="tit">홈페이지 이용약관</div>
			<div class="close js-modal-close">
				<i class="material-icons">clear</i>
			</div>
		</div>

		<div class="ctn-area">
			<div class="modal-form-box">
				<textarea class="ipt document scroll-block" readonly>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
			</div>
		</div>
	</div>
	<!-- modal-terms end-->

	<!-- modal-privacy -->
	<div class="modal modal-document xy-center" id="modal-privacy">
		<div class="tit-area">
			<div class="tit">개인정보의 수집 및 이용목적</div>
			<div class="close js-modal-close">
				<i class="material-icons">clear</i>
			</div>
		</div>

		<div class="ctn-area">
			<div class="modal-form-box">
				<textarea class="ipt document scroll-block" readonly>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
			</div>
		</div>
	</div>
	<!-- modal-privacy end -->

	<script>
		function load_popup(el,mask) {			
			if (mask == 'mask-active') {
				$(".modal-mask").addClass("js-is-active");
			}
			if (el == 'modal-video') {
				$(".modal-video .ratio-inner").html("<iframe src='https://www.youtube.com/embed/"+video_val+"?controls=0&showinfo=0&rel=0&autoplay=1&loop=0' frameborder='0' allowfullscreen></iframe>")
			}
			$(".modal-outer").addClass("js-is-active");
			$("#"+ el +"").addClass("js-is-active");
		}
		function del_popup() {
			if($(".modal-video").hasClass("js-is-active")) {
				$(".modal-video .ratio-inner").html("");
			}
			$(".modal-outer").removeClass("js-is-active");
			$(".modal-mask").removeClass("js-is-active");
			$(".modal").removeClass("js-is-active");
		}

		$(document).ready(function(){
			$("#temp").click(function(){
				video_val = $(this).attr("video_value");
				load_popup ('modal-privacy','mask-active');
			});
			$(".js-modal-close").click(function() {
				del_popup()
			});
		});

		
	</script>
</div>
