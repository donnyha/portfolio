onload = function(){    
    // click on #defaultOpen as a default
    document.getElementById('defaultOpen').click();
    collapse();
}

/**
 * change display based on tab click
 *
 * @param   {string}  page  page name
 * @param             el
 *
 * @return
 */
function changeTab(page, el)
{
    // target .tab_content
    var content = document.getElementsByClassName('tab_content');

    // Hide content
    for(var i=0; i<content.length; i++) {
        content[i].style.display = 'none';
    }

    // show content
    document.getElementById(page).style.display = 'block';
}

/**
 * function for collapsable contents
 *
 * @return
 */
function collapse()
{
    // target .collapsible
    var col = document.getElementsByClassName('collapsible');

    for(i=0; i<col.length; i++) {
        col[i].addEventListener('click', function() {
            this.classList.toggle('active');

            var content = this.nextElementSibling;

            if(content.style.maxHeight) {
                content.style.maxHeight = null;
            }
            else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
    document.getElementById('defaultClick').click();
}