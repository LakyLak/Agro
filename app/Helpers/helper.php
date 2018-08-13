<?php

function filter_conditions($filter_data)
{
    $conditions = [];

    foreach ($filter_data as $field => $value) {
        if (empty($value)) {
            continue;
        }

        if (substr_count($field, '_')) {
            $options = explode('_', $field);
            
            $optionId = ('App\\' . ucfirst($options[0]))::where($options[1], $value)->pluck('id');
            
            $conditions[] = [$options[0].'_id', '=', $optionId];
        } else {
            if (in_array($field, ['date'])) {
                $value = date("Y-m-d", strtotime($value));
            }
            $conditions[] = [$field, '=', $value];
        }
    }

    return $conditions;
}
