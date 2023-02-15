$(function(){
        $('.checkbox_parent').on('click',function(){
                $(this).parents('.checkbox_parent_card').find('.checkbox_childrent').prop('checked',$(this).prop('checked'));
                // $(this).prop(checked) sẽ trả về true hoặc false, nếu true thì checkbox_childrent->checked
        });
        $('.check_all').on('click',function(){
                $(this).parents().find('.checkbox_childrent').prop('checked',$(this).prop('checked'));
                $(this).parents().find('.checkbox_parent').prop('checked',$(this).prop('checked'));
        });
});
