require('./bootstrap');

const addCartText = '加入購物車';
const removeCartText = '移出購物車';

$('body').on('click', '.add-cart', function(){
    const $this = $(this);
    const pid = $this.data('pid');
    if (!$this.hasClass('pending')){
        $this.addClass('pending').prop('disabled', true);
        const finallyFunc = () => {
            $this.removeClass('pending').prop('disabled', false);
        }
        if ($this.data('exist')){
            axios.delete('/cart/'+pid).then((res) => {
                console.log(res);
                $this.text(addCartText);
            }).finally(finallyFunc);
        }else{
            axios.post('/cart', {pid}).then((res) => {
                console.log(res);
                $this.text(removeCartText);
            }).finally(finallyFunc);
        }
    }
});
