try {
  /* button scroll to top design */
let toTop = document.getElementById('toTop');
toTop.style.display = 'none';
window.addEventListener('scroll', () => {
    if(this.scrollY > 300){
        toTop.style.display = 'block';
    }else{
        toTop.style.display = 'none';
    }
})
toTop.onclick = function(){
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// tăng giảm quantity product
var inputField = document.getElementById('inputField');
var decreaseBtn = document.getElementById('decreaseBtn');
var increaseBtn = document.getElementById('increaseBtn');

decreaseBtn.addEventListener('click', function() {
  var currentValue = parseInt(inputField.value);
  if (!isNaN(currentValue)) {
    inputField.value = currentValue - 1;
  }
});

increaseBtn.addEventListener('click', function() {
  var currentValue = parseInt(inputField.value);
  if (!isNaN(currentValue)) {
    inputField.value = currentValue + 1;
  }
});
function increment() {
  var inputElement = document.getElementById("numberInput");
  var currentValue = parseInt(inputElement.value, 10);
  inputElement.value = currentValue + 1;
}

function decrement() {
  var inputElement = document.getElementById("numberInput");
  var currentValue = parseInt(inputElement.value, 10);
  
  // Đảm bảo số nhỏ nhất là 1
  if (currentValue > 1) {
      inputElement.value = currentValue - 1;
  }
}
} catch (error) {
  
}

// hàm kiểm tra số lượng tìm kiếm được
function indexSearch(){
  var container = document.querySelectorAll(".product .swiper-wrapper .swiper-slide");
  var title = document.querySelector(".menu_right .title .index")
  title.innerHTML = container.length;
}
indexSearch();

