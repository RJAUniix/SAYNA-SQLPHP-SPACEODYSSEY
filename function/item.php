<?php
// fonction pour affucher les items
function displayItem($item)
{
    // prendre l'id de l'item à tester
    $editItemId = get('editItem');
    if ($editItemId == $item['id']) {
        $html = '<form action="editItem.php" method="POST">';
        $html .= '<input type="hidden" name="editItem" value="' . $item['id'] . '">';
        $html .=
            '<div class="input-group input-group-sm mt-2">
            <input type="text" class="form-control" name="task" value="' . $item['tasks'] . '">
            <span class="input-group-append">
              <button type="submit" class="btn btn-info btn-flat">OK</button>
            </span>
          </div>';
        $html .= '</form>';
    } else {
        $html = '
            <li class="' . ($item['checked'] ? 'done'  : '') . '">
            <!-- checkbox -->
            <div class="icheck-primary d-inline ml-2">
            <a href="toggleItem.php?item=' . $item['id'] . '">';
        if ($item['checked']) {
            $html .= '<i class="far fa-check-square"></i>';
        } else {
            $html .= '<i class="far fa-square"></i>';
        }
        $html .= '
            </a></div>
            <!-- todo text -->
            <span class="text">' .
            $item['tasks']
            . '</span>
            <!-- General tools such as edit or delete-->
            <div class="tools">
            <a href="index.php?editItem=' . $item['id'] . '">
                <i class="fas fa-edit"></i>
            </a>
            <a href="deleteItem.php?item=' . $item['id'] . '">
                <i class="fas fa-trash"></i>
            </a>
            </div>
            </li>';
    }
    return $html;
}
