<?php declare(strict_types=1);

namespace mzb\Forms;

class Form
{
    private $form = '';

    /**
     * create form
     *
     * @return void
     */

    public function create()
    {
        return $this->form;
    }
    

    /**
     * Début de la balise form
     *
     * @param string $action
     * @param string $method
     * @param string $id
     * @param array $attribute
     * @return self
     */
    public function start_form(
        string $action = "",
        string $method = 'post',
        string $id = '#',
        array $attribute = []
    ): self {
        $this->form .= '<form  action="' . $action . '" method="' . $method . ' " id="' . $id . '"';
        $this->form .= $attribute ? $this->addAttributes($attribute).'>' : '>';
        return $this;
    }
    
    /**
     * Ajoute les attributs du formulaire
     *
     * @param array $attributes
     * @return self
     */
    private function addAttributes(array $attributes): string
    {
        $attribute_data='';
        $short_attributes = ['autocomplete', 'autofocus', 'checked', 'disabled',
        'formaction', 'formenctype', 'formmethod', 'formnovalidate',
        'formtarget', 'list', 'max', 'maxlength', 'min', 'multiple',
        'pattern', 'placeholder', 'readonly', 'required', 'size',
        'src', 'step', 'type', 'value'];
        foreach ($attributes as $key => $value) {
            if (in_array($key, $short_attributes)) {
                $attribute_data .= " $key ";
            } else {
                $attribute_data .=  "$key = '$value'";
            }
        }
        return  $attribute_data;
    }

        
       
    /**
     * add input
     *
     * @param string $name
     * @param string $value
     * @param array $attribute
     * @return self
     */
    public function addText(string $name, string $value = ' ', array $attribute=[]): self
    {
        $this->form .='<input type="text" name="' . $name . '" value="' . $value . '"';
        $this->form .= $attribute ? $this->addAttributes($attribute).'>' : '>';

        return $this;
    }

    /**
     * Ajoute un bouton submettre
     * @param string $texte
     * @param array $attributs
     * @return Form
     */
    public function addBouton(string $texte, array $attributs = []):self
    {
        // On ouvre le bouton
        $this->form .= '<button ';

        // On ajoute les attributs
        $this->form .= $attributs ? $this->addAttributes($attributs) : '';

        // On ajoute le texte et on ferme
        $this->form .= ">$texte</button>";

        return $this;
    }
    /**
     * add input Textearea
     *
     * @param string $name
     * @param string $value
     * @return self
     */
    public function addTextarea(string $name, string $value = ''): self
    {
        $this->form .='<textarea name="' . $name . '">' . $value . '</textarea>';
        return $this;
    }
    
    /**
     * add Sélect
     *
     * @param string $name
     * @param array $options
     * @param string $selected
     * @return self
     */
    public function addSelect(string $name, array $options, string $selected = ''): self
    {
        $this->form .='<select name="' . $name . '">';
        foreach ($options as $key => $value) {
            $this->form .= '<option value="' . $key . '"';
            $this->form .= $key == $selected ? ' selected="selected >' : '>';
            $this->form .= $value . '</option>';
        }
        $this->form .='</select>';
        return $this;
    }
    
    /**
     * addCheckbox
     *
     * @param string $name
     * @param string $value
     * @param boolean $checked
     * @return self
     */
    public function addCheckbox(string $name, string $value = '', bool $checked = false): self
    {
        $this->form .='<input type="checkbox" name="' . $name . '" value="' . $value . '"';
        $this->form .= $checked  ? 'checked=checked />' : '/>';
        return $this;
    }
    
    /**
     * addRadio
     *
     * @param string $name
     * @param array $options
     * @param string $selected
     * @return self
     */
    public function addRadio(string $name, array $options, string $selected = ''): self
    {
        foreach ($options as $key => $value) {
            $this->form .='<input type="radio" name="' . $name . '" value="' . $key . '"';
            $this->form .= $key == $selected ? ' checked="checked /> ' : '/> ';
        }
        return $this;
    }
    
    /**
     * addHidden
     *
     * @param string $name
     * @param string $value
     * @return self
     */
    public function addHidden(string $name, string $value = ''): self
    {
        $this->form .='<input type="hidden" name="' . $name . '" value="' . $value . '" />';
        return $this;
    }
    
    /**
     * addFile
     *
     * @param string $name
     * @param string $value
     * @return self
     */
    public function addFile(string $name, string $value = ''): self
    {
        $this->form .= '<input type="file" name="' . $name . '" value="' . $value . '" />';
        return $this;
    }

    /**
     * add label
     * @param string $for
     * @param string $texte
     * @param array $attributs
     * @return Form
     */
    public function addFor(string $name, string $texte, array $attributs = []):self
    {
        $this->form .= "<label for='$name'";
     
        $this->form .= $attributs ? $this->addAttributes($attributs) : '';
        
        $this->form .= ">$texte</label>";

        return $this;
    }
    
    
    /**
     * close form
     *
     * @return self
     */
    public function end_form():self
    {
        $this->form .= '</form>';
        return $this;
    }
}
