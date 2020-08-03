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
  $properties['posttype'] = "journal";    // so from now we save it like a journal entry

  $content = remove_CtrlM_from_line_endings($content);   // I think it is removing /r characters
  $content_paragraphs = explode("\n\n", $content);     // A single \n could be a soft wrap that markdown ignores anyway

  $dream_paragraphs = array();                          // will hold lines of text wrapped with <p class='dream'> tags
  foreach($content_paragraphs as $content_p) {
    $dream_paragraphs[] = "<p class='dream'>" . $content_p . "</p>";
  }

  $dream_content = implode("\n\n", $dream_paragraphs);   // \n\n for human legibility

  return [$properties, $dream_content];
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
