<?php
require_once 'AbstractDisplay.php';

/**
 * ConcreteClassクラス
 */
class ListDisplay extends AbstractDisplay {
    /**
     * ヘッダを表示
     */
    protected function displayHeader() {
        echo '<dl>';
    }

    /**
     * ボディ（クライアントから渡された内容）を表示する
     */
    protected function displayBody() {
        foreach ($this->getData() as $key => $value) {
            echo '<dt>Item ' . $key . '</dt>';
            echo '<dd>' . $value . '</dd>';
        }
    }

    /**
     * フッタを表示
     */
    protected function displayFooter() {
        echo '</dl>';
    }
}
