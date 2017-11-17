var images = ['media1.jpeg','media3.jpeg','media2.jpeg','meet1_2.jpeg','meet1_3.jpeg','meet1_4.jpeg','meet1_5.jpeg','meet1_6.jpeg','meet1_7.jpeg','meet1_8.jpeg','meet1_10.jpeg','meet1_9.jpeg','pamplet.jpeg','pamplethindi.jpg'];

var PageIndex = 1;

/* 123 switch 456 789 */
function SwitchGallery(Page)
{
    if (Page < 1 || Page > 2)
        return;

    $('#prv-btn').parent().removeClass('disabled');
    $('#nxt-btn').parent().removeClass('disabled');

    if(Page == 1)
    {
        $('#prv-btn').parent().addClass('disabled');
    }

    if(Page == 2)
    {
        $('#nxt-btn').parent().addClass('disabled');
    }

    var index = (Page - 1) * 9;

    $(".our-work-photo").each(function(item)
    {
        if (index >= images.length)
        {
            $(this).hide();
            $(this).parent().attr('data-lightbox', "notgallery");
        }
        else
        {
            $(this).show();
            $(this).parent().attr('data-lightbox', 'gallery');
            $(this).parent().attr('href', 'img/' + images[index]);
            $(this).attr('src', 'img/' + images[index]);
        }

        ++index;
    })

    PageIndex = Page;
}

$(function() {
    SwitchGallery(1);
})