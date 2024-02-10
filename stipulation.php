<?php
$js_array = ['./js/member.js'];
include 'inc_header.php';
?>
      <main>
        <h1 class="text-center mt-5">회원 약관 및 개인정보 취급방침 동의</h1>
        <h4>회원 약관</h4>
        <textarea name="" id="" cols="30" rows="10" class="form-control">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi reiciendis eius eaque amet placeat optio aliquam excepturi ullam enim, quis libero eligendi pariatur officia. Repellat, commodi fugiat necessitatibus debitis facilis ipsam officiis impedit ipsum cumque accusantium sit reiciendis atque aspernatur deserunt eveniet doloribus deleniti earum, quisquam tempore quis sapiente modi enim! Deserunt nihil reprehenderit odit magnam soluta perferendis corrupti expedita, voluptates modi, commodi aliquam aut, provident veniam vel sint nesciunt et omnis ea. Reiciendis iure illo accusamus adipisci obcaecati pariatur quisquam? Sit obcaecati aspernatur, animi eius fugiat nihil placeat harum nulla voluptas excepturi dolorum, deserunt magnam illum dignissimos, possimus blanditiis doloremque quis atque non incidunt ipsa! Corporis dolore rem quidem, sunt, minima ipsum, accusantium ducimus nobis odio esse consectetur ratione? Nobis ullam sunt ipsum facilis ratione? Deleniti error recusandae nesciunt et sapiente doloribus eos modi ea assumenda quibusdam nisi, voluptatibus eaque dicta soluta pariatur atque perferendis reiciendis hic ipsam tempore nulla aut tenetur quos! Vel, soluta autem dolores odio corporis repellendus facilis molestias obcaecati animi repellat perspiciatis asperiores veniam ducimus sint. Rem similique repellat repudiandae commodi. Deleniti temporibus atque ullam. Laudantium ea laborum dignissimos enim. Ea quo earum dolorum tempore nesciunt eius iusto necessitatibus, facilis voluptatem alias numquam hic aliquam placeat, optio similique nihil quis aspernatur delectus omnis porro sequi? Quam repudiandae optio eaque qui voluptate? Voluptate excepturi ipsa quod nemo, modi obcaecati quos est repellat. Odit veniam quisquam, soluta voluptate architecto commodi asperiores cumque illo aspernatur nesciunt est ipsam quibusdam sit illum molestiae et? Laudantium vitae in, neque voluptate eius minus nostrum unde iusto enim voluptas sint debitis modi consequuntur, veritatis quis nihil distinctio dicta mollitia odio excepturi culpa, cum sapiente deleniti amet. Dolorem pariatur voluptatum at! Exercitationem totam saepe corrupti fugit. Nesciunt a voluptatibus impedit? Eligendi blanditiis facilis iste, cupiditate pariatur maiores eaque, harum ipsum cum odio nam?
      </textarea
        >

        <div class="form-check mt-3">
          <input
            class="form-check-input"
            type="checkbox"
            value="1"
            id="chk_member1"
          />
          <label class="form-check-label" for="chk_member1">
            위 약관에 동의하시겠습니까?
          </label>
        </div>
        <h4 class="mt-3">개인정보 취급방침</h4>
        <textarea name="" id="" cols="30" rows="10" class="form-control">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eveniet, magni nulla quidem nam culpa laborum pariatur rerum totam itaque. Ab culpa perspiciatis assumenda, repellat earum deleniti magnam quod! Labore impedit placeat necessitatibus perspiciatis in dignissimos quisquam. Recusandae, nihil. Facilis reiciendis libero architecto fugiat, quibusdam neque optio rerum veritatis cum facere porro corrupti, eum vero amet quaerat! Officiis quisquam perferendis saepe officia, dignissimos, hic delectus, quis quia eaque repudiandae soluta pariatur. Voluptate, itaque nesciunt obcaecati assumenda dolor quisquam vero autem exercitationem suscipit facere quam molestiae esse deserunt. Quod, tempora modi dolore aut autem quos totam repudiandae dignissimos sapiente, earum adipisci magnam debitis saepe illum dicta porro, culpa consequatur maiores quis! Rerum vero molestiae et dolorem corporis ducimus obcaecati odio distinctio cupiditate, labore, cumque enim perferendis. Sapiente iusto ipsum itaque dolores? Autem molestias doloremque, vel et aperiam inventore dolore ratione enim omnis accusantium laboriosam officiis commodi hic eos numquam beatae assumenda iure, quis dolorum expedita voluptatum reprehenderit voluptatem. Optio aliquid unde magnam, tempore praesentium error nostrum illo vero omnis non eaque dolore impedit, architecto ea dolorum soluta? Fuga, tenetur veritatis! Ipsa, doloremque expedita neque natus vitae deleniti, impedit itaque nemo repellat ex deserunt eligendi fuga tempore odio quod, doloribus modi ipsum!
        </textarea>
        <div class="form-check mt-3">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="chk_member2"
          />
          <label class="form-check-label" for="chk_member2">
            위 개인정보 취급방침에 동의하시겠습니까?
          </label>
        </div>
        <div class="mt-4 d-flex justify-content-center gap-2">
          <button class="btn btn-primary flex-grow-1" id="btn_member">
            회원가입
          </button>
          <button class="btn btn-secondary flex-grow-1">가입취소</button>
        </div>

        <form method="post" name="stipulation_form" action="member_input.php" >
          <input type="hidden" name="chk" value="0">
        </form>
      </main>
<?php include 'inc_footer.php'?>
