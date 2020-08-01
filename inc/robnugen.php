<?php

/**
 * Will wrap dream entries with <p class="dream"> tags on each paragraph
 *
 * Called by content.php function posttype_source_function
 *
 * @param array $properties meta data (frontmatter)
 * @param string $content pure text string with no markup
 *
 */
function dream_robnugen_com(array $properties, string $content) {
  $content = remove_CtrlM_from_line_endings($content);
  return [$properties, $content];
}

/**
 * Will allow me to write journals from my phone
 * Called by content.php function posttype_source_function
 *
 * @param array $properties meta data (frontmatter)
 * @param string $content pure text string with no markup
 *
 */
function journal_robnugen_com(array $properties, string $content) {
  $content = remove_CtrlM_from_line_endings($content);
  return [$properties, $content];
}
