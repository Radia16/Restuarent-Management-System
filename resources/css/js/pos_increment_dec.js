// ********** Increment decrement JS code
incrementVar = 0;
$('.inc.button').click(function () {
    var $this = $(this),
        $input = $this.prev('input'),
        $parent = $input.closest('div'),
        newValue = parseInt($input.val()) + 1;
    $parent.find('.inc').addClass('a' + newValue);
    $input.val(newValue);
    incrementVar += newValue;
});
$('.dec.button').click(function () {
    var $this = $(this),
        $input = $this.next('input'),
        $parent = $input.closest('div'),
        newValue = parseInt($input.val()) - 1;
    console.log($parent);
    $parent.find('.inc').addClass('a' + newValue);
    $input.val(newValue);
    incrementVar += newValue;
});