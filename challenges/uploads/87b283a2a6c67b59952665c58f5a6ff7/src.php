 <?php

class Template
{
    public $cacheFile = '/tmp/cachefile';
    public $template = '<div�[��YH�X��	\��]�s���V&Ɩ2gV�7F�����6��7G'V7B�FFF��V����FFF�GF��2����DFF�FFF���GF��2�ɕ���Ƞ���ф��(�����((�����Չ�����չ�ѥ��������ф����ф�(�����(�������������Չ��Ƞ���ф�����Ȥ����<蜀�����ɕ�}��э����<�q��p��������ф����(������������ɕ��ɸ�չ͕ɥ���锠���ф��(���������(��������ɕ��ɸ�mt�(�����((�����Չ�����չ�ѥ����ɕ�ѕ������������ձ���������ձ��(�����(��������������􀑙��������ѡ�̴cacheFile;
        $tpl = $tpl ?? $this->template;
        file_put_contents($file, $tpl);
    }

    public function render($data)
    {
        return sprintf(
            $this->template,
            htmlspecialchars($data['name'])
        );
    }

    public function __destruct()
    {
        $this->createCache();
    }
}
