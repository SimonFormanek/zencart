<?php
$top = '';
while (!$categories_tab->EOF) {
    $cat_id = (int)$categories_tab->fields['categories_id'];
    $cat_name = htmlspecialchars($categories_tab->fields['categories_name']);

    // Každému nadpisu přidáme datový atribut s ID
    $top .= '<div class="category" data-id="' . $cat_id . '">' . $cat_name . '</div>';

    $categories_tab->MoveNext();
}
echo $top;
?>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const fragment = window.location.hash.substring(1); // odstraní #
  if (!fragment) return;

  // Najdi element s odpovídajícím data-id
  const match = document.querySelector(`.category[data-id="${fragment}"]`);
  if (match) {
    match.innerHTML = '<b>bold: ' + match.textContent + '</b>';
  }
});
</script>